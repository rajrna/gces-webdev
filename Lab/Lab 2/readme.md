# Buttons
[![image-2022-05-04-172005918.png](https://i.postimg.cc/j5jFFY5Z/image-2022-05-04-172005918.png)](https://postimg.cc/LqrDJ7j1)
# Borders
[![image-2022-05-02-203723339.png](https://i.postimg.cc/tJ0GZ0nH/image-2022-05-02-203723339.png)](https://postimg.cc/5YmRTRmP)

# Theory

# Buttons using <a> tag
    When creating a button it is preferred to use <a> instead of <button> as it is not possible to use psuedo classes with <button>.
    display:inline-block: property should also be used as it is not possible to use bottom-margin with <a> tag. Creating border around a <a> tag gives the impression of a button.
# Button properties
   
   Button border
     Borders are created on a button using border property.
     border-style:
     There are different types of borders which can be called using border-style property.
     The different types of borders are:
      Dotted
      Dashed
      Solid
      Grooved
      Ridge
      Inset
      Outset

      border-color:
      Border colors can be changed using border-color property.
      Ex: border-color: red;

    Button content
     padding:
      This property is used to create space around the element's content, inside of any defined borders. Similar to margin, padding also can take four values for the spacing and in same order (top right bottom left).It's shorthand property can be used to space equally around the element's content and the border from inside.
        Example : padding : 10px;
#Pseudo Class
     Pseudo class is used to define a special state of an element. It is mostly found to be used with button creation such as changing the state of the button when cursor hovers over it, similarly when button is clicked or the button is not working. It is used to create user interface. It is used with the tags with ':' operator.
      Some of the Pseudo Classes are:
        :hover
        -It's properties are executed when the cursor hovers over the element.
        :active
        -It's properties are executed when the cursor clicks the element.
        :visited
        -It's properties are executed when element has already been visited.
        :disabled
        -It's properties are executed when element is in disabled state i.e. if it can't be activated.

     

