# payload-interop

Defines an interoperable interface for reading Domain Payload objects, along
with domain status indicators.

## Rationale

Reading a Domain Payload is important for user interfaces, of which there
may be many implementations. A standard across implementations can help to
introduce common terminology and idioms.

Does not define an interface for writing or mutating Domain Payload objects.
Creation and manipulation of a Domain Payload are core application concerns, not
user interface concerns. The domain-specific nature places it outside the scope
of an interoperability specification.

Does not specify mutability or immutability of Domain Payload objects, as the
interface is focused on reads, not writes.
