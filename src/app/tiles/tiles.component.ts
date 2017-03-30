import { Component, OnInit } from '@angular/core';
import 'links';

@Component({
  selector: 'app-tiles',
  templateUrl: './tiles.component.html',
  styleUrls: ['./tiles.component.css']
})
export class TilesComponent implements OnInit {
  links: Links = new Links;
  constructor() { }

  ngOnInit() {
  }

}
