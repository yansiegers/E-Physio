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
        <input type="text" id="name" name="name">

        <label class="block" for="email">Email:</label>
        <input type="email" id="email" name="email">

        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday">

        <label for="cars">Choose a car:</label>
        <select id="cars">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
        </select>

        <input type="submit" value="Submit">
    </form>

    <input id="text" type="text">
    <input id="cehckbox" type="checkbox">
    <input id="radio" type="radio">

    <input id="date" type="date">
    <input id="time" type="time">
    <input id="week" type="week">
    <input id="month" type="month">
    <input id="datetime-local" type="datetime-local">

    <input id="email" type="email">
    <input id="number" type="number">
    <input id="password" type="password">
    <input id="search" type="search">
    <input id="tel" type="tel">
    <input id="url" type="url">

    <input id="file" type="file">
    <input id="image" type="image">

    {{--<input id="color" type="color">--}}
    {{--<input id="range" type="range">--}}

    <input type="submit" value="Submit">
    <button type="submit">Submit</button>

    <input type="reset" value="Reset">
    <button type="reset">Reset</button>

    <input type="button" value="Button">
    <button type="button">Button</button>

@stop
