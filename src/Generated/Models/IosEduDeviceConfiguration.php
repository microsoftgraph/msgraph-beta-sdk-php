<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosEduDeviceConfiguration extends DeviceConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var IosEduCertificateSettings|null $deviceCertificateSettings The Trusted Root and PFX certificates for Device
    */
    private ?IosEduCertificateSettings $deviceCertificateSettings = null;
    
    /**
     * @var IosEduCertificateSettings|null $studentCertificateSettings The Trusted Root and PFX certificates for Student
    */
    private ?IosEduCertificateSettings $studentCertificateSettings = null;
    
    /**
     * @var IosEduCertificateSettings|null $teacherCertificateSettings Trusted Root and PFX certificates for iOS EDU.
    */
    private ?IosEduCertificateSettings $teacherCertificateSettings = null;
    
    /**
     * Instantiates a new IosEduDeviceConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosEduDeviceConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosEduDeviceConfiguration {
        return new IosEduDeviceConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceCertificateSettings property value. The Trusted Root and PFX certificates for Device
     * @return IosEduCertificateSettings|null
    */
    public function getDeviceCertificateSettings(): ?IosEduCertificateSettings {
        return $this->deviceCertificateSettings;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceCertificateSettings' => function (ParseNode $n) use ($o) { $o->setDeviceCertificateSettings($n->getObjectValue(array(IosEduCertificateSettings::class, 'createFromDiscriminatorValue'))); },
            'studentCertificateSettings' => function (ParseNode $n) use ($o) { $o->setStudentCertificateSettings($n->getObjectValue(array(IosEduCertificateSettings::class, 'createFromDiscriminatorValue'))); },
            'teacherCertificateSettings' => function (ParseNode $n) use ($o) { $o->setTeacherCertificateSettings($n->getObjectValue(array(IosEduCertificateSettings::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the studentCertificateSettings property value. The Trusted Root and PFX certificates for Student
     * @return IosEduCertificateSettings|null
    */
    public function getStudentCertificateSettings(): ?IosEduCertificateSettings {
        return $this->studentCertificateSettings;
    }

    /**
     * Gets the teacherCertificateSettings property value. Trusted Root and PFX certificates for iOS EDU.
     * @return IosEduCertificateSettings|null
    */
    public function getTeacherCertificateSettings(): ?IosEduCertificateSettings {
        return $this->teacherCertificateSettings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('deviceCertificateSettings', $this->deviceCertificateSettings);
        $writer->writeObjectValue('studentCertificateSettings', $this->studentCertificateSettings);
        $writer->writeObjectValue('teacherCertificateSettings', $this->teacherCertificateSettings);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the deviceCertificateSettings property value. The Trusted Root and PFX certificates for Device
     *  @param IosEduCertificateSettings|null $value Value to set for the deviceCertificateSettings property.
    */
    public function setDeviceCertificateSettings(?IosEduCertificateSettings $value ): void {
        $this->deviceCertificateSettings = $value;
    }

    /**
     * Sets the studentCertificateSettings property value. The Trusted Root and PFX certificates for Student
     *  @param IosEduCertificateSettings|null $value Value to set for the studentCertificateSettings property.
    */
    public function setStudentCertificateSettings(?IosEduCertificateSettings $value ): void {
        $this->studentCertificateSettings = $value;
    }

    /**
     * Sets the teacherCertificateSettings property value. Trusted Root and PFX certificates for iOS EDU.
     *  @param IosEduCertificateSettings|null $value Value to set for the teacherCertificateSettings property.
    */
    public function setTeacherCertificateSettings(?IosEduCertificateSettings $value ): void {
        $this->teacherCertificateSettings = $value;
    }

}
