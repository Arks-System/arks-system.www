import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-tiles',
  templateUrl: './tiles.component.html',
  styleUrls: ['./tiles.component.css']
})
export class TilesComponent implements OnInit {
  links = [
    // {name: 'Arks-System', route: '/'},
    {name: 'Recrutement', route: '/recruit'},
    {name: 'Arks-System Tool', route: '/tool'}
  ];
  public constructor() {
  }

  public ngOnInit() {
  }

}
