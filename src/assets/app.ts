/**
 * Here we can load libraries into our app -> ask google which libraries are cool
 */
import * as _ from 'lodash';
import './app.css'
import * as moment from 'moment';

/**
 * @see https://www.typescriptlang.org/docs/handbook/classes.html
 */
class HelloWorld {
    greeting: string;

    constructor(message: string) {
        this.greeting = message;
    }

    /**
     * @see https://www.typescriptlang.org/docs/handbook/functions.html
     */
    greet() {
        return "Hello, " + this.greeting;
    }

    init() {
        const date: string = this.date('DD.MM.YYYY')
        console.log(date)

        const calculation: number = this.plus(55, 77)
        console.log(calculation)

        let component: any = this.component();
        document.body.appendChild(component);
        console.log(component)
        this.addListener('section')
    }


    // Simple function adds HTML component to DOM
    component() {
        const element = document.createElement('section');
        element.innerHTML = _.join(['Hello', 'webpack'], ' - ');
        return element;
    }


    // Parameter format has type string
    date = function (format: string): string {
        return moment().format(format)
    };

    // The parameters 'x' and 'y' have the type number
    plus: (x: number, y: number) => number = function (
        x: number,
        y: number
    ): number {
        return x + y;
    };


    addListener(selector: string) {
        document.querySelector(selector)
            .addEventListener('click', this.handleClick);
    }

    removeListener(selector: string) {
        document.querySelector(selector)
            .removeEventListener('click', this.handleClick);
    }


    handleClick() {
        console.log("Clicked!");
    }
}

let helloWorld = new HelloWorld("world")

helloWorld.greet();
helloWorld.init()



