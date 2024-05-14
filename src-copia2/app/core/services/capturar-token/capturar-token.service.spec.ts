import { TestBed } from '@angular/core/testing';

import { CapturarTokenService } from './capturar-token.service';

describe('CapturarTokenService', () => {
  let service: CapturarTokenService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(CapturarTokenService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
