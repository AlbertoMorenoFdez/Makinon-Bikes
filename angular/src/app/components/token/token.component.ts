import { Component, OnInit  } from '@angular/core';
import { CapturarTokenService } from '../../core/services/capturar-token/capturar-token.service';

@Component({
  selector: 'app-token',
  standalone: true,
  imports: [],
  templateUrl: './token.component.html',
  styleUrl: './token.component.css'
})
export class TokenComponent implements OnInit {
  existeToken: boolean=false;
  constructor(private capturarTokenService: CapturarTokenService) {}
  
  ngOnInit() {
    this.capturarTokenService.capturarToken();
    this.existeToken = this.capturarTokenService.getToken() !== null;
  }

}
