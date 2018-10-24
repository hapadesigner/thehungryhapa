const accessToken = "7862303869.0be39d3.74387213a7cc474cb81417da31b11007"

const apiUrl = "https://api.instagram.com/v1/users/self/media/recent/?access_token=" + accessToken

const sectionTag = document.querySelector(".instafeed-photos")

const fetchFromInstagram = function () {
    return fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            return data.data.slice(0, 4).map(post => {
                return {
                    link: post.link,
                    image: post.images.standard_resolution.url
                }
            })
        })
        .then(cleanData => {
            sectionTag.innerHTML = ""

            cleanData.forEach(post => {
                sectionTag.innerHTML = sectionTag.innerHTML + `
                    <a href="${post.link}">
                        <img src="${post.image}">
                    </a>
                `
            })
        })
        .catch(function (error) {
            console.error(error)
            sectionTag.innerHTML = "Error: Whoops! Images not found"
        })
}

fetchFromInstagram()