---
menu: Home
onpage_menu: true
content:
    items: @self.modular
    order:
        by: default
        dir: asc
        custom:
            - _brand_intro
            - _brand_logo
            - _brand_cvp
            - _menu
            - _menu_intro
            - _menu_mini
            - _menu_mixed
            - _menu_mega
            - _menu_fitness
            - _clients_intro
            - _clients
            - _testimonials
            - _gallery
            - _contact_intro
            - _contact

form:
    name: my-nice-form
    action: /home
    fields:
        -
            name: name
            id: name
            label: Name
            classes: 'form-control form-control-lg'
            placeholder: 'seu nome'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            id: email
            classes: 'form-control form-control-lg'
            label: Email
            placeholder: 'seu e-mail para contato'
            type: text
            validate:
                rule: email
                required: true
        -
            name: message
            label: Message
            classes: 'form-control form-control-lg'
            size: long
            placeholder: 'sua mensagem'
            type: textarea
            validate:
                required: true
    buttons:
        -
            type: submit
            value: enviar mensagem
            class: 'btn btn-outline-primary btn-lg btn-block'
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to: ['{{ config.plugins.email.from }}', '{{ form.value.email }}']
                subject: '[Feedback] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
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


