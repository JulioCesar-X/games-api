import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { Test10Component } from './components/test10/test10.component';
import { Test11Component } from './components/test11/test11.component';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [
    RouterOutlet,
    Test10Component,
    Test11Component
  ],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {
  title = 'games_front';
}
