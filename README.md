## Description

Модуль створений для організації розробки сайту

## REQUIREMENTS

Drupal ^9

## Folders description

### / (root)

конфігураційні файли

module_template.info - загальна інформація про модуль 

модуль налаштований на відображення довільного шаблону [див. templates](#templates)

module_template.routing - link для відображення шаблону 
наприклад: 
https://kinto.com/funds/test/a1

module_template.module - перелік шаблонів

module_template.libraries - опис кастомних бібліотек, що можуть бути підлючені в шаблон

### css

тут автоматично створюються кінцеві css після препроцесної обробки sass
файли напряму не редагуються (див. \scss)

### img

файли з картинками, psd-дизайном

### js

js автоматично підключається в бібліотеці, що описана в module_template.libraries
напряму ніде включати не треба

### scss

*.scss файли на основі яких препроцессор sass створює css файл - його треба розмістити в \css

### src

код модуля

### templates

twig файли - шаблони
кожний файл може бути використаний один одним, в цьому випадку шаблон повинен описаний в module_template.module


