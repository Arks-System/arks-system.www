import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-tiles',
  templateUrl: './tiles.component.html',
  styleUrls: ['./tiles.component.css']
})
export class TilesComponent implements OnInit {
  links = [
    {name: 'Arks-System Tool', routerLink: '/tool'},
    {name: 'Steam Community', href: 'https://steamcommunity.com/groups/Arks-System'},
    {name: 'Recrutement (Steam)', href: 'https://steamcommunity.com/groups/Arks-System/discussions/0/540735426139834762/'},
    {name: 'Recrutement (Formulaire)', href: 'https://goo.gl/vqlBNB'},
    {name: 'Archives', routerLink: '/archive'}
  ];
  public constructor() {
  }

  public ngOnInit() {
  }

}
