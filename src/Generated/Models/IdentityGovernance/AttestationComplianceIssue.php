<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AttestationComplianceIssue extends ComplianceIssue implements Parsable 
{
    /**
     * Instantiates a new AttestationComplianceIssue and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttestationComplianceIssue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttestationComplianceIssue {
        return new AttestationComplianceIssue();
    }

    /**
     * Gets the attestationBlockReasons property value. The attestationBlockReasons property
     * @return array<string>|null
    */
    public function getAttestationBlockReasons(): ?array {
        $val = $this->getBackingStore()->get('attestationBlockReasons');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attestationBlockReasons'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'attestationBlockReasons' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAttestationBlockReasons($val);
            },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('attestationBlockReasons', $this->getAttestationBlockReasons());
    }

    /**
     * Sets the attestationBlockReasons property value. The attestationBlockReasons property
     * @param array<string>|null $value Value to set for the attestationBlockReasons property.
    */
    public function setAttestationBlockReasons(?array $value): void {
        $this->getBackingStore()->set('attestationBlockReasons', $value);
    }

}
