import { TestBed } from '@angular/core/testing';

import { ValidacionesFormularioService } from './validaciones-formulario.service';

describe('ValidacionesFormularioService', () => {
  let service: ValidacionesFormularioService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ValidacionesFormularioService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
