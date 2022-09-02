import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ComienzoComponent } from './componets/comienzo/comienzo.component';
import { DashbordComponent } from './componets/dashbord/dashbord.component';
// Import the module from the SDK
import { AuthModule } from '@auth0/auth0-angular';
import { ListComponent } from './Persona/list/list.component';
import { AddComponent } from './Persona/add/add.component';
import { EdditComponent } from './Persona/eddit/eddit.component';

@NgModule({
  declarations: [
    AppComponent,
    ComienzoComponent,
    DashbordComponent,
    ListComponent,
    AddComponent,
    EdditComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    // Import the module into the application, with configuration
    AuthModule.forRoot({
      domain: 'dev-vljdu180.us.auth0.com',
      clientId: 'zIkANDDJyaGXVmPJGcOqoKh9DLnGHOVe'
    }),
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
