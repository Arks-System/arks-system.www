import { ArksSystem.WwwPage } from './app.po';

describe('arks-system.www App', () => {
  let page: ArksSystem.WwwPage;

  beforeEach(() => {
    page = new ArksSystem.WwwPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
