import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-tiles',
  templateUrl: './tiles.component.html',
  styleUrls: ['./tiles.component.css']
})
export class TilesComponent implements OnInit {
  links = [
    {name: 'Arks-System Tool', route: '/tool'},
    {name: 'La team', route: '/team'},
    {name: 'Recrutement', route: '/recruit'},
    {name: 'Archives', route: '/archive'}
  ];
  public constructor() {
  }

  public ngOnInit() {
  }

}
