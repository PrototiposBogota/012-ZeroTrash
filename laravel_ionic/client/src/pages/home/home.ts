import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { Http, Headers } from '@angular/http';
import 'rxjs/add/operator/map';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {

	public data:any;

  constructor(public navCtrl: NavController, public http: Http)
  {

  let header = new Headers();
  header.append('Accept','application/json');
  header.append('Authorization','Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjUwYWVlZWM2YTM3YTJmODhmOTJhYzdiMDE1ZGNlZjBhMWZhZGYyZjhjYTc3ZjEyZjNkNDM4ODE2OWRkN2U2MjI1ZWM0YjAxOTM2ZGI1Mjg5In0.eyJhdWQiOiIxIiwianRpIjoiNTBhZWVlYzZhMzdhMmY4OGY5MmFjN2IwMTVkY2VmMGExZmFkZjJmOGNhNzdmMTJmM2Q0Mzg4MTY5ZGQ3ZTYyMjVlYzRiMDE5MzZkYjUyODkiLCJpYXQiOjE1MzE0Mzk3MTYsIm5iZiI6MTUzMTQzOTcxNiwiZXhwIjoxNTYyOTc1NzE2LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.zLSvKDwKr1KfwO7AE8gchry4DFTN0HF6Ov5_NOpBiQHUPHHF06Y-LAhCkeg8rFtvbtrcIyiEZQXAY7Y-4T3ySgLh2rVA4HRmbnNCtjUOPyt0m5SWtD5uI_-Lk-g0Tmp0jjuo-LS-I7a3MsJyR62voXZKs6B53cfIDy9XFar7dFENtvS9Nl52x7hrpnAfFF_lUNlQfESv1fE2bvOSTF3TCIAOsmYRbDqb80c_hkXT56L2aPA-BDpsEbqT4-mHTAjrUWjvB9UQ26FxZMk1AiGQJOErTY1mAeWoj9UUYd7CDceq0CXd05zlatWmVGwop4_d2DSJw7OD3VuzEjKmiy8dvqS56g8R4i2sGHYtkq_6OtBUt7TmEtqQ0KZ3bgBNO9UWZFzPBqI40YOsYQmy--yoongSKcvFz1r0l0scW76W_F4fJeNlu-46Xuhr83jey4b1uQTSvyxhQvrjbli3OjdTyR4Q4en_LJkYrvThlsGrA1-2MMnMESlmHmbKpcoxCzVkD66LfV0qVDsRPGYHqn5M_I8SgHPMjbnOTHr5yvC4NcNwev8np6KFxHTz5jCoTCGPtVZsryMPpV6O1NqxsXCbFEavj9-4oHkb9XONCXEMudfhZ-bS0vzcoy3hcOBkLCkpu9YX07G2Mn7PoT-BIyp5SKGxdTOekbWfgsxBgt8Nj0g');


  this.http.get('http://127.0.0.1:8000/api/liquen', {headers: header})
  .map(res => res.json())
  .subscribe(
  	data=> {

  		console.log(data);
  		this.data = data;

  	},

  	err => {
  		console.log('error')

  	}


  	);
  }

}
