import { Component } from '@angular/core';

import { AboutPage } from '../about/about';
import { ContactPage } from '../contact/contact';
import { HomePage } from '../home/home';
import { NovedadesPage } from "../novedades/novedades";
import { NuevaPage } from "../nueva/nueva";

@Component({
  templateUrl: 'tabs.html'
})
export class TabsPage {

  tab1Root = HomePage;
  tab2Root = AboutPage;
  tab3Root = ContactPage;
  tab4Root = NovedadesPage;
  tab5Root = NuevaPage;

  constructor() {

  }
}
