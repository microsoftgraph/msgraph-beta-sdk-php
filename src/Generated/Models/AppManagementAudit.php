<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AppManagementAudit extends DirectoryAudit implements Parsable 
{
    /**
     * Instantiates a new AppManagementAudit and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppManagementAudit
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppManagementAudit {
        return new AppManagementAudit();
    }

    /**
     * Gets the appliedAppManagementPolicyRestrictions property value. The appliedAppManagementPolicyRestrictions property
     * @return array<AppliedAppManagementPolicyRestriction>|null
    */
    public function getAppliedAppManagementPolicyRestrictions(): ?array {
        $val = $this->getBackingStore()->get('appliedAppManagementPolicyRestrictions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppliedAppManagementPolicyRestriction::class);
            /** @var array<AppliedAppManagementPolicyRestriction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliedAppManagementPolicyRestrictions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appliedAppManagementPolicyRestrictions' => fn(ParseNode $n) => $o->setAppliedAppManagementPolicyRestrictions($n->getCollectionOfObjectValues([AppliedAppManagementPolicyRestriction::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('appliedAppManagementPolicyRestrictions', $this->getAppliedAppManagementPolicyRestrictions());
    }

    /**
     * Sets the appliedAppManagementPolicyRestrictions property value. The appliedAppManagementPolicyRestrictions property
     * @param array<AppliedAppManagementPolicyRestriction>|null $value Value to set for the appliedAppManagementPolicyRestrictions property.
    */
    public function setAppliedAppManagementPolicyRestrictions(?array $value): void {
        $this->getBackingStore()->set('appliedAppManagementPolicyRestrictions', $value);
    }

}
