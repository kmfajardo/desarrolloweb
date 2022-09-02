import { Component, OnInit } from '@angular/core';
import { AuthService } from '@auth0/auth0-angular';
import Swal from 'sweetalert2';
@Component({
  selector: 'app-dashbord',
  templateUrl: './dashbord.component.html',
  styleUrls: ['./dashbord.component.css']
})
export class DashbordComponent implements OnInit {

  constructor(public auth: AuthService) { }

  ngOnInit(): void {
  }

    logOut(){
        this.auth.logout()
    }
    showModal(){
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
      
      Toast.fire({
        icon: 'success',
        title: 'jornada iniciada tenga un buen día'
      })
    }

    final(){
      Swal.fire({
        title: 'seguro de terminar la jornada laboral',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'si desea salir '
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Su jornada a terminado',
            'que todo aya salido bien que tenga un buen dia',
            'success'
          )
        }
      })

    }
    
    lista(){
      
    }

    Nuevo(){

    }
}
