# Copilot Instructions

## General Principles
- Write code that is **readable, maintainable, and well-structured**.
- Follow the **DRY (Don't Repeat Yourself) principle** to avoid redundancy.
- Use **escriptive vaiable and function names** (e.g., 'calculateTotal' instead of 'calc').
- Keep code **simple and concise** while ensure clarity - **Avoid over-engineering**.
- 
## Coding Standards
- Use single quotes for strings unless double quotes are required inside the string.
- Indent with 4 spaces.
- Utilize `async/await` for asynchronous operations.
- Add **one space** after commas ('function(a, b)' not 'function(a,b)').
- Avoid extra whitespace inside parentheses ('(x + y)' not '( x + y )').
- Use camelCase for variable and function names.
- Use PascalCase for classes.

## Code Structure
- **Imports:** Place imports at the **top** in this order:
    1. **Standard library** (e.g., 'import os')
    2. **Third-party libraries** (e.g., 'import numpy as np')
    3. **Local application modules** (e.g., 'from myModules import myFunction')
    - User **one import per line**; avoid 'from module import *'.
    - Sort imports alphabetically ascendending** within each group.
    - **Remove** unused libraries **in the import functions** to keep code clean.

## Error Handling
- Use 'tryp/except' blocks to handle exceptions gracefully.
- Catch **specific exceptions** (e.g., 'ValueError') rather than generic ones.
