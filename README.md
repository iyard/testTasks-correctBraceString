[![Build Status](https://travis-ci.org/iyard/testTasks-correctBraceString.svg?branch=master)](https://travis-ci.org/iyard/testTasks-correctBraceString)
[![Maintainability](https://api.codeclimate.com/v1/badges/d37fdf96dd24e69a117b/maintainability)](https://codeclimate.com/github/iyard/testTasks-correctBraceString/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/d37fdf96dd24e69a117b/test_coverage)](https://codeclimate.com/github/iyard/testTasks-correctBraceString/test_coverage)

# Выполнение тестового задания:
1. Написать функцию, принимающую на вход количество пар скобок и возвращающую валидную строку, вида «({})()», в которой соблюдена правильная вложенность всех скобок.
В строке должны присутствовать различные комбинации. Т.е. строка не может быть  всегда «((()))» или «()()()». Следует комбинировать три вида скобок «()», «{}», «[]».
2. Написать функцию, проверяющую валидность работы первой функции. Функция принимает на вход строку из задачи выше и возвращает true || false. (есть ошибки вложенности или нет)

# Установка
```
git clone https://github.com/iyard/testTasks-correctBraceString.git
make install
```
# Использование
```
Usage:
  bin/getBracesString (-h|--help)
  bin/getBracesString <bracesCount>

Options:
  * -h --help     	Show this screen
```
