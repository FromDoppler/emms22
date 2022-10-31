"use strict";
document.addEventListener('DOMContentLoaded', () => {
    const chatId = document.getElementById('chatId');
    const url = "../../../../twitterController.php";
    const url2 = "../../../../twitterPost.php";
    const tweetForm = document.getElementById('tweetForm');
    const tweetFormError = document.querySelector('.tweet__form__error');
    const hashtag = document.getElementById('hashtag').innerHTML;
    const inputTweetText = document.getElementById('userText');
    const maxTweetLength = 280;
    const formCharacters = 280 - hashtag.length;
    let newestId = '';

    const printFormCharacters = (userChars = 0) => {
        const tweetLengthAvailable = formCharacters - userChars;
        const formCharacterSpan = document.getElementById('formCharacters');
        formCharacterSpan.innerHTML = tweetLengthAvailable;
        if (tweetLengthAvailable < 0) {
            showError(1);
        }
    }
    printFormCharacters();


    const activeInputListeners = () => {
        inputTweetText.addEventListener('keypress', () => {
            clearError();
            setTimeout(() => {
                const userChars = inputTweetText.value.length;
                printFormCharacters(userChars);
            }, 500);

        });

        inputTweetText.addEventListener('keydown', (event) => {
            const key = event.key;
            if (key === 'Delete' || key === 'Backspace') {
                setTimeout(() => {
                    const userChars = inputTweetText.value.length;
                    printFormCharacters(userChars);
                }, 500);
                clearError();
            }
        });
    }

    if (inputTweetText) {
        activeInputListeners();
    }

    const clearError = () => {
        tweetFormError.classList.remove('showError');
    }

    const showError = (errorNumber) => {
        const errorMap = [
            '¡Ouch! Debes ingresar al menos dos caracteres',
            '¡Ouch! Excediste el limite de caracteres'
        ]
        tweetFormError.innerHTML = errorMap[errorNumber];
        tweetFormError.classList.add('showError');
    }

    const clearInput = () => {
        inputTweetText.value = '';
    }

    const validateTweet = (userTweet) => {
        if (userTweet.length < 3) showError(0);
        if (userTweet.length > formCharacters) showError(1);
        return ((userTweet.length >= 3) && (userTweet.length < formCharacters));
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
                clearInput();
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
