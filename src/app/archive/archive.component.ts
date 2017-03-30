import { Component, OnInit } from '@angular/core';


@Component({
  selector: 'app-archive',
  templateUrl: './archive.component.html',
  styleUrls: ['./archive.component.css']
})
export class ArchiveComponent implements OnInit {
  public links = [
    'link1',
    'link2'
  ];
  constructor() { }

  ngOnInit() {
  }

}
