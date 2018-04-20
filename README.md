# Todone

## Description
'Todone' is Todo app.

## Ready development
### Install
```bash
brew install selenium-server-standalone
brew install geckodriver
brew cask install chromedriver 
```

### Develop
```bash
export PATH=$PATH:./node_modules/.bin
gulp
```

### Test
```bash
selenium-server -port 4444
vendor/bin/codecept run 
```