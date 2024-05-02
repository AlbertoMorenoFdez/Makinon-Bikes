import { TestBed } from '@angular/core/testing';

import { ApiFestivoService } from './api-festivo.service';

describe('ApiFestivoService', () => {
  let service: ApiFestivoService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ApiFestivoService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
