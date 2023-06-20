<?php

/* [...] */

final class FormController extends AbstractController
{
    #[DocumentedRoute(/* API documentation details */)]
    public function createEntryAction(#[FromRequest] CreateEntryCommand $command): Response
    {
        $envelope = $this->commandBus->dispatch($command);

        return $this->createJsonResponseFromEnvelope($envelope, Response::HTTP_CREATED);
    }

    /* [...] */
}
