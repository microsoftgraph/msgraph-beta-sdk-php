<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FileContentThreatSubmission extends FileThreatSubmission implements Parsable 
{
    /**
     * Instantiates a new FileContentThreatSubmission and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.fileContentThreatSubmission');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileContentThreatSubmission
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileContentThreatSubmission {
        return new FileContentThreatSubmission();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fileContent' => fn(ParseNode $n) => $o->setFileContent($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fileContent property value. It specifies the file content in base 64 format.
     * @return string|null
    */
    public function getFileContent(): ?string {
        $val = $this->getBackingStore()->get('fileContent');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileContent'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('fileContent', $this->getFileContent());
    }

    /**
     * Sets the fileContent property value. It specifies the file content in base 64 format.
     * @param string|null $value Value to set for the fileContent property.
    */
    public function setFileContent(?string $value): void {
        $this->getBackingStore()->set('fileContent', $value);
    }

}
