---
title: Registration
menu: Registration
visible: true
list_summary: ''
form:
    name: Registration
    fields:
        program: { id: 'radio-akadem', type: radio, label: 'Program' , default: akademicky, options: { akademicky: Akademicky, neakademicky: Neakademický} }
        first_name: { type: text, label: 'Meno', validate: { required: true}}
        last_name: { type: text, label: 'Priezvisko', validate: { required: true} }
        birthdate: { type: date, label: 'Dátum narodenia', validate: { required: true} }
        company: { type: text, label: 'Firma, škola', validate: { required: true} }
        email: { type: email, label: 'Email', validate: { required: true} }
        phone: { type: text, label: 'Telefón'}
        student_info: { type: display, size: large, content: "Ak ste študent uveď:" }
        fakulta: { type: text, label: 'Fakulta'}
        year: { type: text, label: 'Ročník'}
        specialization: { type: text, label: 'Špecializácia'}
        note_info: { type: display, size: large, content: "Poznámka pre príjemcu:" }
        note: {type: textarea, rows: 3, cols: 10, label: 'Poznámka'}
    buttons:    
        -
            type: submit
            value: Odoslať
    process:
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Thank you for your feedback!'
        -
            display: thankyou
---

##asdadasdas