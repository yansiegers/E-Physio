@extends('layouts.test', [
  'title' => 'Design kit'
])

@section('content')
    <h1>Heading 1 - Design kit</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum eleifend tincidunt.</p>

    <h2>Heading 2</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum eleifend tincidunt.</p>

    <h3>Heading 3</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum eleifend tincidunt.</p>

    <h4>Heading 4</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum eleifend tincidunt.</p>

    <h5>Heading 5</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum eleifend tincidunt.</p>

    <h6>Heading 6</h6>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum eleifend tincidunt.</p>

    <ol>
        <li>Coffee</li>
        <li>Tea</li>
        <li>Milk</li>
    </ol>

    <ul>
        <li>Coffee</li>
        <li>Tea</li>
        <li>Milk</li>
    </ul>

    <hr/>

    <form action="/">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="John Doe">

        <label class="block" for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="example@email.com">

        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday">

        <label for="cars">Choose a car:</label>
        <select id="cars">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
        </select>

        <button type="submit">Submit</button>
    </form>

    <label for="text">text:</label><input id="text" type="text" placeholder="text">
    <label for="checkbox">checkbox:</label><input id="checkbox" type="checkbox">
    <label for="radio">radio:</label><input id="radio" type="radio">

    <label for="date">date:</label><input id="date" type="date">
    <label for="time">time:</label><input id="time" type="time">
    <label for="week">week:</label><input id="week" type="week">
    <label for="month">month:</label><input id="month" type="month">
    <label for="datetime">datetime:</label><input id="datetime-local" type="datetime-local">

    <label for="email">email:</label><input id="email" type="email" placeholder="email@example.com">
    <label for="number">number:</label><input id="number" type="1234">
    <label for="password">password:</label><input id="password" type="password" placeholder="password">
    <label for="search">search:</label><input id="search" type="search" placeholder="search">
    <label for="tel">tel:</label><input id="tel" type="tel" placeholder="+31 0612345678">
    <label for="url">url:</label><input id="url" type="url" placeholder="https://example.com/">

    <label for="file">file:</label><input id="file" type="file">

    {{-- <label for="color">color:</label><input id="color" type="color"> --}}
    {{-- <label for="range">range:</label><input id="range" type="range"> --}}

    <input type="submit" value="Submit">
    <button type="submit">Submit</button>

    <input type="reset" value="Reset">
    <button type="reset">Reset</button>

    <input type="button" value="Button">
    <button type="button">Button</button>

@stop
