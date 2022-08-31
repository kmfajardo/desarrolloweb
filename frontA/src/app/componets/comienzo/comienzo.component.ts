import { Component, OnInit } from '@angular/core';
import { Route, Router } from '@angular/router';
import { AuthService } from '@auth0/auth0-angular';
@Component({
  selector: 'app-comienzo',
  templateUrl: './comienzo.component.html',
  styleUrls: ['./comienzo.component.css']
})
export class ComienzoComponent implements OnInit {

  constructor(public auth: AuthService, private router: Router) { }

  ngOnInit(): void {
    this.auth.isAuthenticated$.subscribe(isAuthenticated$ => {
      if(isAuthenticated$){
          this.router.navigate(['/dashbord'])
      }
    })
  }

    login(){
      this.auth.loginWithRedirect()
    }
}
