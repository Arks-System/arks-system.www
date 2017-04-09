import { Component, OnInit } from '@angular/core';
import { ArchiveService } from '../archive.service';

@Component({
  selector: 'app-archive',
  templateUrl: './archive.component.html',
  styleUrls: ['./archive.component.css']
})
export class ArchiveComponent implements OnInit {
  archives = [];
  constructor(private archiveService: ArchiveService) {

  }

  ngOnInit() {
    this.loadArchives();
  }

  loadArchives() {
    this.archiveService.getArchives().subscribe(
      archives => this.archives = archives,
      err => {
        console.error(err);
      });
  }

}
