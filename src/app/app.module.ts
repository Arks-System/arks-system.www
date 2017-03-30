import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { RouterModule } from '@angular/router';

import { AppComponent } from './app.component';
import { TilesComponent } from './tiles/tiles.component';
import { ArchiveComponent } from './archive/archive.component';

import { ArchiveService } from './archive.service';
import { ToolComponent } from './tool/tool.component';

@NgModule({
  declarations: [
    AppComponent,
    TilesComponent,
    ArchiveComponent,
    ToolComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot([
      {
        path: 'archive',
        component: ArchiveComponent
      },
      {
        path: '',
        component: TilesComponent,
        pathMatch: 'full'
      }
      /*{
        path: '',
        redirectTo: '/tiles',
        pathMatch: 'full'
      }*/
    ]),
    FormsModule,
    HttpModule
  ],
  providers: [
    ArchiveService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
