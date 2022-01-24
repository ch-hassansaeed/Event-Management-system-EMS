module.exports = {
  root: true,
  env: {
    node: true
  },
  extends: [
    'plugin:vue/base',
    '@vue/standard'
  ],
  parserOptions: {
    parser: 'babel-eslint'
  },
  rules: {
    'no-console': process.env.NODE_ENV === 'production' ? 'error' : 'off',
    'no-debugger': process.env.NODE_ENV === 'production' ? 'error' : 'off',
    "semi":0, //disable remove extra semicolon
    "comma-dangle":0, //disable trailing last comma
    "spaced-comment":0,//disable Expected space or tab after comment
    "space-before-function-paren": 0 //disable rule of space before function parentheses
  }
}
