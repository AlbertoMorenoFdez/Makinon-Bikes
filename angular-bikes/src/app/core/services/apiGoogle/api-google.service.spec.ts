import { TestBed } from '@angular/core/testing';

import { ApiGoogleService } from './api-google.service';

describe('ApiGoogleService', () => {
  let service: ApiGoogleService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ApiGoogleService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
