<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnTokenIssuanceStartCustomExtension extends CustomAuthenticationExtension implements Parsable 
{
    /**
     * @var array<OnTokenIssuanceStartReturnClaim>|null $claimsForTokenConfiguration The claimsForTokenConfiguration property
    */
    private ?array $claimsForTokenConfiguration = null;
    
    /**
     * Instantiates a new OnTokenIssuanceStartCustomExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onTokenIssuanceStartCustomExtension');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnTokenIssuanceStartCustomExtension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnTokenIssuanceStartCustomExtension {
        return new OnTokenIssuanceStartCustomExtension();
    }

    /**
     * Gets the claimsForTokenConfiguration property value. The claimsForTokenConfiguration property
     * @return array<OnTokenIssuanceStartReturnClaim>|null
    */
    public function getClaimsForTokenConfiguration(): ?array {
        return $this->claimsForTokenConfiguration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'claimsForTokenConfiguration' => function (ParseNode $n) use ($o) { $o->setClaimsForTokenConfiguration($n->getCollectionOfObjectValues(array(OnTokenIssuanceStartReturnClaim::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('claimsForTokenConfiguration', $this->claimsForTokenConfiguration);
    }

    /**
     * Sets the claimsForTokenConfiguration property value. The claimsForTokenConfiguration property
     *  @param array<OnTokenIssuanceStartReturnClaim>|null $value Value to set for the claimsForTokenConfiguration property.
    */
    public function setClaimsForTokenConfiguration(?array $value ): void {
        $this->claimsForTokenConfiguration = $value;
    }

}
