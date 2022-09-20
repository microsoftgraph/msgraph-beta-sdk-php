<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharedEmailDomain extends Entity implements Parsable 
{
    /**
     * @var string|null $provisioningStatus The provisioningStatus property
    */
    private ?string $provisioningStatus = null;
    
    /**
     * Instantiates a new SharedEmailDomain and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.sharedEmailDomain');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharedEmailDomain
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharedEmailDomain {
        return new SharedEmailDomain();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'provisioningStatus' => function (ParseNode $n) use ($o) { $o->setProvisioningStatus($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the provisioningStatus property value. The provisioningStatus property
     * @return string|null
    */
    public function getProvisioningStatus(): ?string {
        return $this->provisioningStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('provisioningStatus', $this->provisioningStatus);
    }

    /**
     * Sets the provisioningStatus property value. The provisioningStatus property
     *  @param string|null $value Value to set for the provisioningStatus property.
    */
    public function setProvisioningStatus(?string $value ): void {
        $this->provisioningStatus = $value;
    }

}
