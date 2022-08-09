<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AgreementFileLocalization extends AgreementFileProperties implements Parsable 
{
    /**
     * @var array<AgreementFileVersion>|null $versions Read-only. Customized versions of the terms of use agreement in the Azure AD tenant.
    */
    private ?array $versions = null;
    
    /**
     * Instantiates a new agreementFileLocalization and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.agreementFileLocalization');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgreementFileLocalization
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgreementFileLocalization {
        return new AgreementFileLocalization();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'versions' => function (ParseNode $n) use ($o) { $o->setVersions($n->getCollectionOfObjectValues(array(AgreementFileVersion::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the versions property value. Read-only. Customized versions of the terms of use agreement in the Azure AD tenant.
     * @return array<AgreementFileVersion>|null
    */
    public function getVersions(): ?array {
        return $this->versions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('versions', $this->versions);
    }

    /**
     * Sets the versions property value. Read-only. Customized versions of the terms of use agreement in the Azure AD tenant.
     *  @param array<AgreementFileVersion>|null $value Value to set for the versions property.
    */
    public function setVersions(?array $value ): void {
        $this->versions = $value;
    }

}
