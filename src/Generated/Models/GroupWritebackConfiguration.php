<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupWritebackConfiguration extends WritebackConfiguration implements Parsable 
{
    /**
     * Instantiates a new GroupWritebackConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupWritebackConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupWritebackConfiguration {
        return new GroupWritebackConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'onPremisesGroupType' => fn(ParseNode $n) => $o->setOnPremisesGroupType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the onPremisesGroupType property value. Indicates the target on-premise group type the cloud object will be written back as. Nullable. The possible values are: universalDistributionGroup, universalSecurityGroup, universalMailEnabledSecurityGroup.If the cloud group is a unified (Microsoft 365) group, this property can be one of the following: universalDistributionGroup, universalSecurityGroup, universalMailEnabledSecurityGroup. Azure AD security groups can be written back as universalSecurityGroup. If isEnabled or the NewUnifiedGroupWritebackDefault group setting is true but this property is not explicitly configured: Microsoft 365 groups will be written back as universalDistributionGroup by defaultSecurity groups will be written back as universalSecurityGroup by default
     * @return string|null
    */
    public function getOnPremisesGroupType(): ?string {
        return $this->getBackingStore()->get('onPremisesGroupType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('onPremisesGroupType', $this->getOnPremisesGroupType());
    }

    /**
     * Sets the onPremisesGroupType property value. Indicates the target on-premise group type the cloud object will be written back as. Nullable. The possible values are: universalDistributionGroup, universalSecurityGroup, universalMailEnabledSecurityGroup.If the cloud group is a unified (Microsoft 365) group, this property can be one of the following: universalDistributionGroup, universalSecurityGroup, universalMailEnabledSecurityGroup. Azure AD security groups can be written back as universalSecurityGroup. If isEnabled or the NewUnifiedGroupWritebackDefault group setting is true but this property is not explicitly configured: Microsoft 365 groups will be written back as universalDistributionGroup by defaultSecurity groups will be written back as universalSecurityGroup by default
     *  @param string|null $value Value to set for the onPremisesGroupType property.
    */
    public function setOnPremisesGroupType(?string $value): void {
        $this->getBackingStore()->set('onPremisesGroupType', $value);
    }

}
