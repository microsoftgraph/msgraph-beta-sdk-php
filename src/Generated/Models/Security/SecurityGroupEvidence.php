<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityGroupEvidence extends AlertEvidence implements Parsable 
{
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $securityGroupId The securityGroupId property
    */
    private ?string $securityGroupId = null;
    
    /**
     * Instantiates a new SecurityGroupEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityGroupEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityGroupEvidence {
        return new SecurityGroupEvidence();
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'securityGroupId' => function (ParseNode $n) use ($o) { $o->setSecurityGroupId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the securityGroupId property value. The securityGroupId property
     * @return string|null
    */
    public function getSecurityGroupId(): ?string {
        return $this->securityGroupId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('securityGroupId', $this->securityGroupId);
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the securityGroupId property value. The securityGroupId property
     *  @param string|null $value Value to set for the securityGroupId property.
    */
    public function setSecurityGroupId(?string $value ): void {
        $this->securityGroupId = $value;
    }

}
