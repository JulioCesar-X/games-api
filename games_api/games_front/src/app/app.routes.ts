import { Routes } from '@angular/router';
import { GenreComponent } from './components/genre/genre.component';
import { Test10Component } from './components/test10/test10.component';

export const routes: Routes = [

  { path: 'genres', component: GenreComponent },
  { path: 'test10', component: Test10Component }

];
