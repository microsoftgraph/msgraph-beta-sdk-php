<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WhatIfAuthenticationContext extends ConditionalAccessContext implements Parsable 
{
    /**
     * Instantiates a new WhatIfAuthenticationContext and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.whatIfAuthenticationContext');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WhatIfAuthenticationContext
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WhatIfAuthenticationContext {
        return new WhatIfAuthenticationContext();
    }

    /**
     * Gets the authenticationContext property value. The authenticationContext property
     * @return string|null
    */
    public function getAuthenticationContext(): ?string {
        $val = $this->getBackingStore()->get('authenticationContext');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationContext'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationContext' => fn(ParseNode $n) => $o->setAuthenticationContext($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('authenticationContext', $this->getAuthenticationContext());
    }

    /**
     * Sets the authenticationContext property value. The authenticationContext property
     * @param string|null $value Value to set for the authenticationContext property.
    */
    public function setAuthenticationContext(?string $value): void {
        $this->getBackingStore()->set('authenticationContext', $value);
    }

}
