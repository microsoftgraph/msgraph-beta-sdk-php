<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CrossTenantAccessPolicyConfigurationDefault extends CrossTenantAccessPolicyConfigurationBase 
{
    /** @var bool|null $isServiceDefault If true, the default configuration is set to the system default configuration. If false, the default settings have been customized. */
    private ?bool $isServiceDefault = null;
    
    /**
     * Instantiates a new crossTenantAccessPolicyConfigurationDefault and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossTenantAccessPolicyConfigurationDefault
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CrossTenantAccessPolicyConfigurationDefault {
        return new CrossTenantAccessPolicyConfigurationDefault();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'isServiceDefault' => function (self $o, ParseNode $n) { $o->setIsServiceDefault($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the isServiceDefault property value. If true, the default configuration is set to the system default configuration. If false, the default settings have been customized.
     * @return bool|null
    */
    public function getIsServiceDefault(): ?bool {
        return $this->isServiceDefault;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isServiceDefault', $this->isServiceDefault);
    }

    /**
     * Sets the isServiceDefault property value. If true, the default configuration is set to the system default configuration. If false, the default settings have been customized.
     *  @param bool|null $value Value to set for the isServiceDefault property.
    */
    public function setIsServiceDefault(?bool $value ): void {
        $this->isServiceDefault = $value;
    }

}
