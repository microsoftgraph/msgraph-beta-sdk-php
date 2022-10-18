<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ImportedAppleDeviceIdentityResult extends ImportedAppleDeviceIdentity implements Parsable 
{
    /**
     * @var bool|null $status Status of imported device identity
    */
    private ?bool $status = null;
    
    /**
     * Instantiates a new ImportedAppleDeviceIdentityResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.importedAppleDeviceIdentityResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImportedAppleDeviceIdentityResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImportedAppleDeviceIdentityResult {
        return new ImportedAppleDeviceIdentityResult();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'status' => fn(ParseNode $n) => $o->setStatus($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the status property value. Status of imported device identity
     * @return bool|null
    */
    public function getStatus(): ?bool {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('status', $this->status);
    }

    /**
     * Sets the status property value. Status of imported device identity
     *  @param bool|null $value Value to set for the status property.
    */
    public function setStatus(?bool $value ): void {
        $this->status = $value;
    }

}
