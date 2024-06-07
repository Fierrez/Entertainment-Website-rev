import {execa} from 'execa';

const {stdout} = await execa`.\\ngrok http --domain=intensely-relative-drum.ngrok-free.app 443`;
// Print command's output
console.log(stdout);