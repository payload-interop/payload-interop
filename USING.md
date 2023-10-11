# Using A Domain Payload

Using a _Domain Payload Object_ is easy, but as with all patterns,
there are some constraints and conditions.

First, think of the _Domain Payload Object_ as a specialized variaton of a _Data
Transfer Object_:

- A _Data Transfer Object_ is composed of fine-grained primitives to be
  carried across an Infrastructure boundary; in contrast,

- A _Domain Payload Object_ is composed mostly of entire Domain objects and
  results to be carried across a User Interface boundary.

Becuase the _Domain Payload Object_ is to be consumed by the User Interface
layer, that means it should be produced within the Application layer (e.g., a
Service Layer, Transaction Script, Application Service, Use Case, and so on).
That is, **DO NOT** produce _Domain Payload Objects_ in the Infrastructure,
Data Source, or other layers; they are emitted always and only from the
Application layer.

Further, the _Domain Payload Object_ should be consumed **only** by the User
Interface layer, and never by the Application, Domain, or other layers. If
you find you need to carry information around within another layer, use
objects that reside in that layer, not an object that is targeted toward the
User Interface.

Finally, if you feel you need a collection of _Domain Payload Objects_,
you should instead create a collection of Domain objects, and retain
that collection within a single Domain Payload. That is, **DO NOT**
return a Domain Payload collection from the Application layer; return
always and only return a single _Domain Payload Object_.
