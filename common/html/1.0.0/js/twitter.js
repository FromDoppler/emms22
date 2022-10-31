"use strict";
document.addEventListener('DOMContentLoaded', () => {
    const chatId = document.getElementById('chatId');
    const url = "../../../../twitterController.php";
    const url2 = "../../../../twitterPost.php";
    const tweetForm = document.getElementById('tweetForm');
    const hashtag = document.getElementById('hashtag').innerHTML;
    const inputTweetText = document.getElementById('userText');
    let newestId = '';

    inputTweetText.addEventListener('keydown', () => {
        clearError();
    });

    const clearError = () => {
        document.querySelector('.tweet__form__error').classList.remove('showError');
    }

    const showError = () => {
        document.querySelector('.tweet__form__error').classList.add('showError');
    }

    const validateTweet = (userTweet) => {
        if (userTweet.length < 3) showError();
        return userTweet.length >= 3;
    }

    const getTweets = async () => {
        const data = {
            method: 'getAllTweets',
            id: '',
            sinceId: newestId
        }
        const settings = {
            method: 'POST',
            headers: {
                Accept: 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        };
        try {
            const fetchResponse = await fetch(url, settings);
            const data = await fetchResponse.json();
            return data;
        } catch (e) {
            return e;
        }

    }

    const sendTweet = async () => {
        const formData = new FormData(tweetForm);
        const userTweet = formData.get('userTweet')

        if (validateTweet(userTweet)) {
            const data = {
                method: 'sendTweet',
                text: hashtag + userTweet,
                id: ''
            }
            const settings = {
                method: 'POST',
                headers: {
                    Accept: 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            };
            try {
                const fetchResponse = await fetch(url2, settings);
                const data = await fetchResponse.json();
                console.log(data)
                return data;
            } catch (e) {
                return e;
            }
        }
    }

    if (tweetForm != null && tweetForm != undefined) {
        const tweetFormBtn = document.getElementById('tweetForm').querySelector('button');
        tweetFormBtn.addEventListener('click', sendTweet);
    }


    const printUsers = (users) => {
        users.forEach(({ username: userName, profile_image_url: userImage, tweet: userTweet }, index) => {
            setTimeout(() => {
                generateUserBlock(userName, userImage, userTweet);
            }, 1500 * index);
        });
    }

    const generateUserBlock = (userName, userImage, userTweet) => {
        const divContainer = document.createElement('div');
        divContainer.classList.add('userTweet__container');
        const img = createImageTag(userImage, userName);
        const divUserTweet = document.createElement('div')
        const userTweetText = document.createElement('p')
        userTweetText.innerText = userName + '' + userTweet;
        divUserTweet.appendChild(userTweetText);
        divUserTweet.classList.add('userTweet');
        divContainer.appendChild(img);
        divContainer.appendChild(divUserTweet);
        chatId.insertBefore(divContainer, chatId.firstChild);
        // chatId.appendChild(divContainer);
    }

    const createImageTag = (src, alt) => {
        const img = document.createElement('img');
        img.src = src;
        img.classList.add('userImg');
        if (alt != null) img.alt = alt;
        return img;
    }

    const getUsers = (data, { users }) => {
        const usersData = [];
        let user;
        data.forEach(({ author_id: userId, text: tweet }) => {
            user = getUser(userId, users)[0];
            user.tweet = tweet;
            usersData.push(user);
        });

        return usersData;
    }

    const getUser = (userId, users) => {
        return users.filter(user => user.id === userId);
    }

    const getTweetsRequest = () => {
        getTweets().then(({ data, includes: usersData, meta }) => {
            if (meta.result_count > 0) {
                newestId = meta.newest_id;
                const users = getUsers(data.reverse(), usersData);
                printUsers(users);
            } else {
                console.log('No hay tweets nuevos')
            }
        });
    }

    const firstLoad = () => {
        getTweetsRequest();
    }
    firstLoad();

    setInterval(() => {
        getTweetsRequest();
    }, 20000);



});
