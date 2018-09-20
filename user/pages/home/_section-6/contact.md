---
title: Registration
menu: Registration
cache_enable: false
form:
    action: /home
    name: contact
    fields:
        -
            name: name
            label: AAA
            placeholder: 'Enter your name'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: 'Enter your email address'
            type: email
            validate:
                required: true
        -
            name: message
            label: Message
            placeholder: 'Enter your message'
            type: textarea
            validate:
                required: true
        -
            name: g-recaptcha-response
            label: Captcha
            type: captcha
            recaptcha_site_key: 6LeZWmYUAAAAAGXWdMuDwEiSyS0AQCIHYSjs1w_5
            recaptcha_not_validated: 'Captcha not valid!'
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Submit
        -
            type: reset
            value: Reset
    process:
        -
            captcha:
                recatpcha_secret: 6LeZWmYUAAAAAPofVRaRwELabHM8cm27ZfCgiKeS
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to:
                    - '{{ config.plugins.email.from }}'
                    - '{{ form.value.email }}'
                subject: '[Feedback] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: contact-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Thank you for getting in touch!'
---

Duis fermentum nunc nec consequat consectetur. Quisque nec nisi ut justo scelerisque aliquam sed nec eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas tempor tincidunt purus nec laoreet. 
