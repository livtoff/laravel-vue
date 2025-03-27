import "momentum-trail"

declare module "momentum-trail" {
    export interface RouterGlobal {"url":"http:\/\/srpm.test","port":null,"defaults":[],"routes":{"sanctum.csrf-cookie":{"uri":"sanctum\/csrf-cookie","methods":["GET","HEAD"]},"home":{"uri":"\/","methods":["GET","HEAD"]},"storage.local":{"uri":"storage\/{path}","methods":["GET","HEAD"],"wheres":{"path":".*"},"parameters":["path"]}},"wildcards":{"sanctum.*":[],"storage.*":[]}}
}