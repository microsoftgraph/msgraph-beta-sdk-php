<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PermissionGrantPreApprovalPolicy extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new PermissionGrantPreApprovalPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.permissionGrantPreApprovalPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PermissionGrantPreApprovalPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PermissionGrantPreApprovalPolicy {
        return new PermissionGrantPreApprovalPolicy();
    }

    /**
     * Gets the conditions property value. A list of condition sets describing the conditions under which the permission to grant consent for the app has been preapproved.
     * @return array<PreApprovalDetail>|null
    */
    public function getConditions(): ?array {
        $val = $this->getBackingStore()->get('conditions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PreApprovalDetail::class);
            /** @var array<PreApprovalDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'conditions' => fn(ParseNode $n) => $o->setConditions($n->getCollectionOfObjectValues([PreApprovalDetail::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('conditions', $this->getConditions());
    }

    /**
     * Sets the conditions property value. A list of condition sets describing the conditions under which the permission to grant consent for the app has been preapproved.
     * @param array<PreApprovalDetail>|null $value Value to set for the conditions property.
    */
    public function setConditions(?array $value): void {
        $this->getBackingStore()->set('conditions', $value);
    }

}
