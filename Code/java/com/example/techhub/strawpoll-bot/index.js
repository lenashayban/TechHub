const inquirer = require('inquirer');
const cp       = require('child_process'); /* To call the second script */
const fs       = require('fs');

var config   = require('./config.json');



inquirer.prompt([{
          type: 'list',
          name: 'command',
          message: 'What would you like to do ?',
          choices: ['Bot a poll', 'Configurate'],
        },
      ]).then(answers => { if(answers.command == 'Bot a poll') {inquirer.prompt([{
                           type: 'input',
                           name: 'url',
                           message: 'What is the poll URL (link) ?'},])
        .then(answers => {
          if(answers.url.includes('strawpoll.com') || answers.url.includes('strawpoll.de')) { 
            console.log('I can only bot strawpoll.me polls for now :('); return
          }
          if(!answers.url.includes('strawpoll.me')) { 
            console.log('You must use the following format: https://www.strawpoll.me/XXXXXXXXX'); return
          }
          config.current_section.url = answers.url;

          fs.writeFile('./config.json', JSON.stringify(config), function writeJSON(err) { if (err) return console.log(err); });

inquirer.prompt([{ type: 'input',
                   name: 'option_AAAA',
                   message: 'Which option you want to bot for (0 is the first one, 1 the second etc) ?'},
      ]).then(answers => {
          console.log("\x1b[32m" + 'Checking proxies, breaking the security system and sending votes..');
          config.current_section.option = answers.option_AAAA;
          
          fs.writeFile('./config.json', JSON.stringify(config), function writeJSON(err) { if (err) return console.log(err); });
          cp.fork('./main.js');
            })
        })
      }
      if(answers.command == 'Configurate') {
inquirer.prompt([{
          type: 'list',
          name: 'prox',
          message: 'Automatically get proxies ?',
          choices: ['true', 'false'],
        },
      ]).then(answers => { 
        switch(answers.prox) {
          case 'true':
          config.options.get_proxies = true;  fs.writeFile('./config.json', JSON.stringify(config), function writeJSON(err) { if (err) return console.log(err); });
          console.log('Done. Execute the script again to apply the changes.')
          break
          case 'false': 
          config.options.get_proxies = false; fs.writeFile('./config.json', JSON.stringify(config), function writeJSON(err) { if (err) return console.log(err); });
          console.log('Done. Note that you must add proxies in the proxy_list.json file now (unless you activate this option again)')
          break
      }})}})
